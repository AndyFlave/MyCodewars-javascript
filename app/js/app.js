const toggleSidebar = () => {
	let $sidebar = document.querySelector('.sidebar')
	let $btn = document.querySelector('.toggle-sidebar')

	$btn.addEventListener('click', (e) => {
		$sidebar.classList.contains('open') ? $sidebar.classList.remove('open') : $sidebar.classList.add('open')
		e.target.classList.toggle('open')
	})
}

document.addEventListener("DOMContentLoaded", () => {
	toggleSidebar()
})