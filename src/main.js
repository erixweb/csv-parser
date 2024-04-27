const input = document.querySelector('input[type="file"]')
const form = document.querySelector("form")

form.addEventListener("submit", async (e) => {
    await sendFile(e)
})

async function sendFile(e) {
    e.preventDefault()

    const formData = new FormData()
    formData.append("file", input.files[0])

    const req = await fetch("/api/upload.php", {
        method: "POST",
        body: formData
    })
    const res = await req.json()

    createTable(res)
}
function createTable (res) {
    let tableHMTL = ""

    // Headers
    res.headers.forEach((header) => {
        tableHMTL += `
            <th>${header}</th>
        ` 
    })
    tableHMTL = "<thead>" + tableHMTL + "</thead>"

    let data = ""
    res.data.forEach((body) => {
        let tds = ""

        for (const element in body) {
            tds += `<td>${body[element]}</td>`
        }

        data += `
            <tr>
                ${tds}
            </tr>
        ` 
        console.log(data)
    })
    tableHMTL += "<tbody>" + data + "</tbody>"

    document.querySelector(".table").innerHTML = "<table>"+tableHMTL+"</table>"
}