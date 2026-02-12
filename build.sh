#!/bin/bash
# ======================================
# Build Script - Siqueira e Blanco
# Projeto PHP estático (sem etapa de bundling)
# Minifica CSS/JS quando npx está disponível.
# ======================================

set -e

echo "[build] iniciando..."

DIST="dist"
rm -rf "$DIST"
mkdir -p "$DIST"

if command -v npx >/dev/null 2>&1; then
    HAS_NPX=1
else
    HAS_NPX=0
fi

copy_dir_if_exists() {
    local dir="$1"
    if [ -d "$dir" ]; then
        cp -r "$dir" "$DIST/"
    fi
}

copy_file_if_exists() {
    local src="$1"
    local dst="$2"
    if [ -f "$src" ]; then
        cp "$src" "$dst"
    fi
}

echo "[build] copiando estrutura do site..."
copy_dir_if_exists "artigos"
copy_dir_if_exists "clientes"
copy_dir_if_exists "contato"
copy_dir_if_exists "docs"
copy_dir_if_exists "includes"
copy_dir_if_exists "portfolio"
copy_dir_if_exists "projetos"
copy_dir_if_exists "screenshots"
copy_dir_if_exists "servicos"
copy_dir_if_exists "setores"
copy_dir_if_exists "sobre"

cp -f *.php "$DIST/" 2>/dev/null || true
cp -f *.css *.js "$DIST/" 2>/dev/null || true
cp -f *.png *.jpg *.webp *.ico *.svg "$DIST/" 2>/dev/null || true
cp -f *.xml *.txt *.json "$DIST/" 2>/dev/null || true
copy_file_if_exists ".htaccess" "$DIST/.htaccess"

if [ "$HAS_NPX" -eq 1 ]; then
    echo "[build] minificando CSS/JS..."

    npx --yes cssnano-cli styles.css "$DIST/styles.css" --no-map 2>/dev/null || true
    npx --yes cssnano-cli artigos/artigo.css "$DIST/artigos/artigo.css" --no-map 2>/dev/null || true
    npx --yes cssnano-cli projetos/projeto.css "$DIST/projetos/projeto.css" --no-map 2>/dev/null || true
    npx --yes cssnano-cli setores/setor.css "$DIST/setores/setor.css" --no-map 2>/dev/null || true

    npx --yes terser script.js -c -m -o "$DIST/script.js" 2>/dev/null || true
    npx --yes terser form-validate.js -c -m -o "$DIST/form-validate.js" 2>/dev/null || true
    npx --yes terser sw.js -c -m -o "$DIST/sw.js" 2>/dev/null || true
else
    echo "[build] npx não encontrado; mantendo arquivos sem minificação."
fi

ORIGINAL_SIZE=$(du -sh . --exclude=dist 2>/dev/null | cut -f1)
DIST_SIZE=$(du -sh "$DIST" 2>/dev/null | cut -f1)

echo ""
echo "[build] concluido."
echo "  tamanho fonte: ${ORIGINAL_SIZE:-N/A}"
echo "  tamanho dist : ${DIST_SIZE:-N/A}"
echo "  saida        : ./$DIST/"
