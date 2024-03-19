document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('.sign-up');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var firstNameInput = document.getElementById('first_name');
        var lastNameInput = document.getElementById('last_name');
        var emailInput = document.getElementById('email');
        var passwordInput = document.getElementById('password');
        var passwordAgainInput = document.getElementById('passwordagain');
        var phoneInput = document.getElementById('phone');
        var termsCheckbox = document.getElementById('terms');

        var firstNameValue = firstNameInput.value.trim();
        var lastNameValue = lastNameInput.value.trim();
        var emailValue = emailInput.value.trim();
        var passwordValue = passwordInput.value.trim();
        var passwordAgainValue = passwordAgainInput.value.trim();
        var phoneValue = phoneInput.value.trim();

        // Basit validasyon kuralları ekleyin
        if (firstNameValue === '' || lastNameValue === '' || emailValue === '' || passwordValue === '' || passwordAgainValue === '' || phoneValue === '') {
            alert('Lütfen tüm alanları doldurun.');
            return;
        }

        // Emailin belirli bir desene uygun olup olmadığını kontrol et
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(emailValue)) {
            alert('Geçerli bir email adresi girin.');
            return;
        }

        // Şifrelerin eşleşip eşleşmediğini kontrol et
        if (passwordValue !== passwordAgainValue) {
            alert('Şifreler eşleşmiyor.');
            return;
        }

        // Şifrenin minimum 6 karakter uzunluğunda olup olmadığını kontrol et
        if (passwordValue.length < 6) {
            alert('Şifreniz en az 6 karakter uzunluğunda olmalıdır.');
            return;
        }

        // Kullanıcı sözleşmesini kabul edip etmediğini kontrol et
        if (!termsCheckbox.checked) {
            alert('Kullanıcı sözleşmesini kabul etmelisiniz.');
            return;
        }

        // Formu gönderin (bu kısmı gerçek sunucu işlemleri ile değiştirmelisiniz)
        form.submit();
    });
});