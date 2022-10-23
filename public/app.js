async function main() {
	const res = await fetch('https://jsonplaceholder.typicode.com/posts?_limit=10');
	return await res.json();
}

main().then(data => {
	console.log(data);
});