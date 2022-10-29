async function main() {
	const res = await fetch('https://jsonplaceholder.typicode.com/posts?_limit=10');
	return await res.json();
}

main().then(data => {

	document.querySelector('.wrapper')
		.innerHTML = createUlList(data);
	
});

function createUlList(data) {
	let out = '<ul>';
	
	data.forEach(item => {
		out += `<li>${item.title}</li>`;
	})
	
	out += '</ul>'
	
	return out;
}