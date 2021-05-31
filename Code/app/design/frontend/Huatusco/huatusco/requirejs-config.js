var config = {
    deps: [
        'js/custom'
    ],
    paths: {
        'bootstrap4': 'bootstrap/js/bootstrap.bundle.min',
        'owlcarousel' : 'js/owl.carousel.min'
    },
    shim: {
        'bootstrap4': {
            'deps': ['jquery']
        },
        'owlcarousel': {
            'deps': ['jquery']
        }
    }
};