const input = document.getElementById('search')
const container = document.getElementById('conts')

input.addEventListener('keyup', (e) => {
    const lists = container.querySelectorAll('tr')
    const textToSearch = e.target.value.toUpperCase()
    for (let i of lists) {
        const text = i.innerText
        if (text.toUpperCase().indexOf(textToSearch) > -1) i.style.display = ''
        else i.style.display = 'none'
    }
})

input.addEventListener('search', (e) => {
    const lists = container.querySelectorAll('tr')
    const textToSearch = e.target.value.toUpperCase()
    for (let i of lists) {
        const text = i.innerText
        if (text.toUpperCase().indexOf(textToSearch) > -1) i.style.display = ''
        else i.style.display = 'none'
    }
})