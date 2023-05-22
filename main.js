fetch('/proizvodi').then(Response => Response.json())
.then
(proizvodi => 
    {
    const tableBody = document.querySelector('#productTable tbody');
    proizvodi.forEach( product => 
    {
        const row= document.createElement('tr');
        row.innerHTML = 
        '<td>${product.Id}</td>'
        '<td>${product.Naziv}</td>'
        '<td>${product.Cijena}</td>';
       tableBody.appendChild(row);
    });
});