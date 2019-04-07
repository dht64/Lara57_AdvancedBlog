const accordions = document.getElementsByClassName('has-submenu');
const adminSlideoutButton = document.getElementById('admin-slideout-button');

function setSubmenuStyles (submenu, maxHeight, margins) {
	submenu.style.maxHeight = maxHeight;
	submenu.style.marginTop = margins;
	submenu.style.marginBottom = margins;
}

adminSlideoutButton.onclick = function() {
	this.classList.toggle('is-active');
	document.getElementById('admin-side-menu').classList.toggle('is-active');
}

for (var i = 0; i < accordions.length; i++) {
	if (accordions[i].classList.contains('is-active')) {
		const submenu = accordions[i].nextElementSibling;
		setSubmenuStyles(submenu, submenu.scrollHeight + "px", "0.75em");
	}

	accordions[i].onclick = function () {
		this.classList.toggle('is-active');

		const submenu = this.nextElementSibling;
		if (submenu.style.maxHeight) {
			// menu is open, we need to close it
			setSubmenuStyles(submenu, null, null)
		} else {
			// menu is close, so to open it
			setSubmenuStyles(submenu, submenu.scrollHeight + "px", "0.75em");
		}
	}
}