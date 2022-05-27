const { fromPairs } = require("lodash")

console.log('js ok!')


function deleteComic(id){
    console.log(id)
    let form = document.getElementsByTagName('form')
    console.log(form[0])
    let deleteRoute = "http://127.0.0.1:8000/comics/" + id
    form[0].action = deleteRoute
}


