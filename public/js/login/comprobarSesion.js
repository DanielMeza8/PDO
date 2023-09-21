$(document).ready(() => {
    $('#session').click(() => {
        $.ajax({
            type: "POST",
            data: 'id_session=' + parseInt(Math.random() * 10),
            url: "./app/controller/login/session.php",
            success: (response) => {
                alert(`Sesion ID: ${response}`);
            }
        })
    })
});