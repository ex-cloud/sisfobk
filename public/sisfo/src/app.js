

window.axios.defaults.header.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if(token){
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf');
}


function forEdit(this, evt) {
    console.log("masdads")
}

// window.forEdit = (input, evt) => {
//     evt.preventDefault();
//     console.log("masukk")
//     // axios.get('/edit/' + $(input).val()).then(response => {
//     //   console.log(response)
//     // })
//     // .catch(error => {
//     //     console.log(error)
//     // })
// }