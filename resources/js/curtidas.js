
document.addEventListener('DOMContentLoaded', function () {
    const btnLikes = document.querySelectorAll('.btn-like');
    btnLikes.forEach(btnLike => {
        btnLike.addEventListener('click', handleLike);
    });
});

function handleLike() {
    const postId = this.getAttribute('data-post-id');

    // Verifica se o usuário já curtiu usando um Cookie
    if (getCookie(`liked_${postId}`)) {
        alert('Você já curtiu esta postagem!');
        return;
    }

    setCookie(`liked_${postId}`, 'true', 480);

    // Redireciona para a rota 'postagemCurtir'
    window.location.href = `posts/${postId}`;
}

// Funções auxiliares para manipulação de Cookies
function setCookie(name, value, minutes) {
    const date = new Date();
    date.setTime(date.getTime() + (minutes * 60 * 1000));
    document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}
