window.addEventListener('scroll', function(){
    let header = document.querySelector('#header')
    header.classList.toggle('rolagem',window.scrollY > 0)
})

var onda1 = document.getElementById('onda1')
var onda2 = document.getElementById('onda2')
var onda3 = document.getElementById('onda3')
var onda4 = document.getElementById('onda4')

window.addEventListener('scroll', function(){
    var rolagemPos = window.scrollY

    onda1.style.backgroundPositionX = 400 + rolagemPos * 2 + 'px'
    onda2.style.backgroundPositionX = 300 + rolagemPos * -2 + 'px'
    onda3.style.backgroundPositionX = 200 + rolagemPos * 1 + 'px'
    onda4.style.backgroundPositionX = 100 + rolagemPos * -1 + 'px'
})





