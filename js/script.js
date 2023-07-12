
const forms = document.querySelectorAll('.check-form')

const r1 = document.getElementById('rate1')
const r2 = document.getElementById('rate2')
const r3 = document.getElementById('rate3')
const r4 = document.getElementById('rate4')
const r5 = document.getElementById('rate5')
const r6 = document.getElementById('rate6')
const r7 = document.getElementById('rate7')
const r8 = document.getElementById('rate8')
const r9 = document.getElementById('rate9')
const r10 = document.getElementById('rate10')

const rates = [r1, r2, r3, r4, r5, r6, r7, r8]

for (let i = 0; i < forms.length; i++) {
    forms[i].children[2].addEventListener('click', () => {
        forms[i].children[4].checked = false
        forms[i].children[6].checked = false
        rates[i].value = 'Very Satisfactory'
    })
    forms[i].children[4].addEventListener('click', () => {
        forms[i].children[2].checked = false
        forms[i].children[6].checked = false
        rates[i].value = 'Satisfactory'
    })
    forms[i].children[6].addEventListener('click', () => {
        forms[i].children[2].checked = false
        forms[i].children[4].checked = false
        rates[i].value = 'Poor'
    })
}

const c0 = document.getElementById('c25')
const c1 = document.getElementById('c26')
const c2 = document.getElementById('c27')

c0.addEventListener('click', () => {
    r9.value = 'Very Satisfactory'
})

c1.addEventListener('click', () => {
    c2.checked = false
    r10.value = 'Yes'
})

c2.addEventListener('click', () => {
    c1.checked = false
    r10.value = 'No'
})

const btn = document.getElementById('btn')
const privacy = document.getElementById('privacy')

privacy.addEventListener('click', () => {
    if (privacy.checked) btn.disabled = false
    else btn.disabled = true
})

const file = document.getElementById('file')
const lagda = document.getElementById('lagda')
const c = (event) => {
    console.log(file.value)
    const img = document.createElement('img')
    img.style.height = '40px'
    img.style.width = '100%'
    img.src = URL.createObjectURL(event.target.files[0]) + '#toolbar=0'
    file.style.opacity = '0'
    file.style.height = '0'
    lagda.appendChild(img)
}