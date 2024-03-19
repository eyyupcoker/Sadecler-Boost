document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('.sign-in');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var emailInput = document.getElementById('email');
        var passwordInput = document.getElementById('password');

        var emailValue = emailInput.value.trim();
        var passwordValue = passwordInput.value.trim();

        if (emailValue === '') {
            alert('Email alanını doldurun.');
            return;
        }

        // Emailin belirli bir desene uygun olup olmadığını kontrol et
        var emailPattern = /^[a-zA-Z0-9._-]+@[^\.]+\.{1}[a-zA-Z]{2,}$/;
        if (!emailPattern.test(emailValue)) {
            alert('Geçerli bir email adresi girin.');
            return;
        }

        if (passwordValue === '') {
            alert('Şifre alanını doldurun.');
            return;
        }

        // Formu gönderin (bu kısmı gerçek sunucu işlemleri ile değiştirmelisiniz)
        form.submit();
    });
});