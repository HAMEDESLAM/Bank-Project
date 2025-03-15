let dbFetch = fetch('/db/');

dbFetch.then(response => response.json())
.then(data => {
    const tableBody = document.getElementById("usersTableBody");
    tableBody.innerHTML = "";

    data.forEach(user => {
        const row = `<tr>
            <td>${user.id}</td>
            <td>${user.fullname}</td>
            <td>${user.birthDate}</td>
            <td>${user.nationalId}</td>
            <td>${user.address}</td>
            <td>${user.phoneNumber}</td>
            <td>${user.email}</td>
        </tr>`;
        tableBody.innerHTML += row;
    });
})
.catch(error => console.error("Error fetching users:", error));