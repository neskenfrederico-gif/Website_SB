// ===== Sub-page Form Validation & Anti-Spam =====
// Lightweight script for projetos/ and setores/ pages.
// Mirrors the validation logic from script.js (index.php).

document.addEventListener("DOMContentLoaded", function () {
  var forms = document.querySelectorAll(
    ".project-form, .contato__form"
  );

  forms.forEach(function (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      form.classList.add("was-submitted");

      // HTML5 validation
      if (!form.checkValidity()) {
        showNotification("Por favor, preencha todos os campos obrigatórios.", "error");
        return;
      }

      var formData = new FormData(form);
      var data = Object.fromEntries(formData);

      // Honeypot check
      if (data._gotcha) {
        // Silently block bot submissions
        showNotification("Mensagem enviada com sucesso!", "success");
        form.reset();
        return;
      }

      // Email validation
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (data.email && !emailRegex.test(data.email)) {
        showNotification("Por favor, insira um e-mail válido.", "error");
        return;
      }

      var submitBtn = form.querySelector('button[type="submit"]');
      var originalText = submitBtn.innerHTML;
      submitBtn.innerHTML = "<span>Enviando...</span>";
      submitBtn.disabled = true;

      fetch(form.action, {
        method: "POST",
        body: formData,
        headers: { Accept: "application/json" },
      })
        .then(function (response) {
          if (response.ok) {
            showNotification(
              "Mensagem enviada com sucesso! Entraremos em contato em breve.",
              "success"
            );
            form.reset();
            form.classList.remove("was-submitted");
          } else {
            throw new Error("Erro no envio");
          }
        })
        .catch(function () {
          // Fallback to WhatsApp
          var whatsappMsg = encodeURIComponent(
            "*Contato via site*\n" +
              "*Nome:* " + (data.name || "") + "\n" +
              "*E-mail:* " + (data.email || "") + "\n" +
              "*Telefone:* " + (data.phone || "Não informado") + "\n" +
              "*Mensagem:*\n" + (data.message || "")
          );
          showNotification(
            "Envio automático indisponível. Abrindo WhatsApp para contato direto.",
            "info"
          );
          window.open(
            "https://wa.me/5562992250067?text=" + whatsappMsg,
            "_blank"
          );
        })
        .finally(function () {
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
        });
    });
  });

  // Phone mask - suporta fixo (8 dígitos) e celular (9 dígitos)
  var phoneInputs = document.querySelectorAll('input[type="tel"]');
  phoneInputs.forEach(function (input) {
    input.addEventListener("input", function () {
      var v = input.value.replace(/\D/g, "").slice(0, 11);
      var formatted = "";
      if (v.length > 0) {
        formatted = "(" + v.slice(0, 2);
      }
      if (v.length > 2) {
        // Se tem 11 dígitos = celular (9XXXX-XXXX), senão fixo (XXXX-XXXX)
        formatted += ") " + v.slice(2, v.length > 10 ? 7 : 6);
      }
      if (v.length > (v.length > 10 ? 7 : 6)) {
        formatted += "-" + v.slice(v.length > 10 ? 7 : 6);
      }
      input.value = formatted;
    });
  });

  // Minimal toast notification
  function showNotification(message, type) {
    var existing = document.querySelector(".form-toast");
    if (existing) existing.remove();

    var toast = document.createElement("div");
    toast.className = "form-toast form-toast--" + type;
    toast.setAttribute("role", "alert");
    toast.textContent = message;

    if (!document.getElementById("form-toast-styles")) {
      var style = document.createElement("style");
      style.id = "form-toast-styles";
      style.textContent =
        ".form-toast{position:fixed;top:20px;right:20px;padding:14px 24px;border-radius:8px;color:#fff;font-size:.95rem;z-index:9999;animation:toastIn .3s ease}" +
        ".form-toast--success{background:#059669}" +
        ".form-toast--error{background:#dc2626}" +
        ".form-toast--info{background:#2563eb}" +
        "@keyframes toastIn{from{opacity:0;transform:translateY(-10px)}to{opacity:1;transform:translateY(0)}}";
      document.head.appendChild(style);
    }

    document.body.appendChild(toast);
    setTimeout(function () {
      toast.style.transition = "opacity .3s";
      toast.style.opacity = "0";
      setTimeout(function () { toast.remove(); }, 300);
    }, 4000);
  }
});
