const showToast = (message = '', isSuccess = true) => {
    Toastify({
        text: message,
        duration: 5000,
        newWindow: true,
        close: true,
        gravity: 'top',
        position: 'right',
        stopOnFocus: true,
        style: {
            background: (isSuccess) ? '#64B040' : '#fa2911',
        }
    })
    .showToast();
}

const redirectRoute = (url) => {
    location.href = url
}