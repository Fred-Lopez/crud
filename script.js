function editarUsuario(id) {
    fetch(`usuario.php?action=edit&id=${id}`)
        .then(response => response.json())
        .then(data => {
            if (data) {
                document.getElementById('id').value = data.id;
                document.getElementById('nome').value = data.nome;
                document.getElementById('email').value = data.email;
            }
        });
}

function excluirUsuario(id) {
    if (confirm('Tem certeza que deseja excluir este usuário?')) {
        fetch(`usuario.php?action=delete&id=${id}`)
            .then(response => response.text())
            .then(data => {
                alert(data);
                location.reload();
            });
    }
}

function limparCampos() {
    document.getElementById('id').value = '';
    document.getElementById('nome').value = '';
    document.getElementById('email').value = '';
    document.getElementById('senha').value = '';
}