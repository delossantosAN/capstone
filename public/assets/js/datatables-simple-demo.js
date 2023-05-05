window.addEventListener('DOMContentLoaded', (event) => {
  // Simple-DataTables
  // https://github.com/fiduswriter/Simple-DataTables/wiki

  const datatablesSimple = document.getElementById('datatablesSimple');
  if (datatablesSimple) {
    new simpleDatatables.DataTable(datatablesSimple);
  }
  const datatablesSimple1 = document.getElementById('datatablesSimple1');
  if (datatablesSimple1) {
    new simpleDatatables.DataTable(datatablesSimple1);
  }
});
