document.querySelector('#searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let from = document.querySelector('input[name="from"]').value;
    let to = document.querySelector('input[name="to"]').value;

    fetch('backend/search.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ from, to })
    })
    .then(response => response.json())
    .then(data => console.log(data));
});
