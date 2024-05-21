function changeContent(dashboard) {
    fetch(dashboard)
        .then(response => response.text())
        .then(html => {
            document.getElementById("mainContent").innerHTML = html;
        })
        .catch(error => console.error('Error fetching content:', error));
}
function changeContent(institute) {
    fetch(institute)
        .then(response => response.text())
        .then(html => {
            document.getElementById("mainContent").innerHTML = html;
        })
        .catch(error => console.error('Error fetching content:', error));
}