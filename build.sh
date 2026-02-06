#!/bin/bash
# ======================================
# Build Script - Siqueira e Blanco
# Minifica CSS e JS para produção
# ======================================

set -e

echo "🔧 Build iniciando..."

# Diretório de saída
DIST="dist"
rm -rf "$DIST"
mkdir -p "$DIST"
mkdir -p "$DIST/setores"
mkdir -p "$DIST/projetos"
mkdir -p "$DIST/portfolio"

# Verificar se terser e cssnano estão instalados
if ! command -v npx &> /dev/null; then
    echo "❌ Node.js/npx não encontrado. Instale Node.js primeiro."
    exit 1
fi

# Instalar dependências de build se necessário
if [ ! -d "node_modules" ]; then
    echo "📦 Instalando dependências de build..."
    npm init -y 2>/dev/null || true
    npm install --save-dev terser cssnano-cli html-minifier-terser 2>/dev/null || {
        echo "⚠️  Não foi possível instalar dependências. Copiando arquivos sem minificação..."
        cp -r *.html *.css *.js *.png *.jpg *.webp *.ico *.xml *.txt *.json "$DIST/" 2>/dev/null || true
        cp -r setores/* "$DIST/setores/" 2>/dev/null || true
        cp -r projetos/* "$DIST/projetos/" 2>/dev/null || true
        cp -r portfolio/* "$DIST/portfolio/" 2>/dev/null || true
        echo "✅ Build completo (sem minificação)"
        exit 0
    }
fi

echo "📦 Minificando CSS..."
npx cssnano styles.css "$DIST/styles.css" --no-map 2>/dev/null || cp styles.css "$DIST/styles.css"

echo "📦 Minificando JavaScript..."
npx terser script.js -c -m -o "$DIST/script.js" 2>/dev/null || cp script.js "$DIST/script.js"
npx terser form-validate.js -c -m -o "$DIST/form-validate.js" 2>/dev/null || cp form-validate.js "$DIST/form-validate.js"
npx terser sw.js -c -m -o "$DIST/sw.js" 2>/dev/null || cp sw.js "$DIST/sw.js"

echo "📦 Minificando HTML..."
for file in *.html; do
    npx html-minifier-terser "$file" \
        --collapse-whitespace \
        --remove-comments \
        --minify-css true \
        --minify-js true \
        -o "$DIST/$file" 2>/dev/null || cp "$file" "$DIST/$file"
done

# Subpastas
for file in setores/*.html; do
    [ -f "$file" ] && (npx html-minifier-terser "$file" --collapse-whitespace --remove-comments -o "$DIST/$file" 2>/dev/null || cp "$file" "$DIST/$file")
done

for file in projetos/*.html; do
    [ -f "$file" ] && (npx html-minifier-terser "$file" --collapse-whitespace --remove-comments -o "$DIST/$file" 2>/dev/null || cp "$file" "$DIST/$file")
done

# CSS de subpastas
cp setores/*.css "$DIST/setores/" 2>/dev/null || true
cp projetos/*.css "$DIST/projetos/" 2>/dev/null || true

echo "📦 Copiando assets..."
cp -r *.png *.jpg *.webp *.ico *.svg "$DIST/" 2>/dev/null || true
cp *.xml *.txt *.json "$DIST/" 2>/dev/null || true
cp .htaccess "$DIST/" 2>/dev/null || true
cp -r portfolio/* "$DIST/portfolio/" 2>/dev/null || true

# Calcular tamanho
ORIGINAL=$(du -sh . --exclude=node_modules --exclude=dist 2>/dev/null | cut -f1)
MINIFIED=$(du -sh "$DIST" 2>/dev/null | cut -f1)

echo ""
echo "✅ Build completo!"
echo "   Original: $ORIGINAL"
echo "   Minificado: $MINIFIED"
echo "   Saída: ./$DIST/"
