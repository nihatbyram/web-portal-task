function openModal(id) {
  document.getElementById(id).dispatchEvent(new CustomEvent('open-me', { detail: {}}));
}
function closeModal(id) {
  document.getElementById(id).dispatchEvent(new CustomEvent('close-me', { detail: {}}));
}

openModal('basicModal');