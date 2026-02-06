document.addEventListener('DOMContentLoaded', () => {
  fetch('/data/images.xml')
    .then(res => {
      if (!res.ok) throw new Error('XML não carregou');
      return res.text();
    })
    .then(str => new DOMParser().parseFromString(str, 'text/xml'))
    .then(xml => {

      const imagesNode = xml.querySelector('assets > images');
      if (!imagesNode) return;

      const basePath = imagesNode.getAttribute('folder');

      const footerBgNode = imagesNode.querySelector('image[id="footer-bg"]');
      const logoNode = imagesNode.querySelector('image[id="logo"]');

      if (footerBgNode) {
        document.getElementById('footer').style.backgroundImage =
          `url('${basePath}/${footerBgNode.getAttribute('src')}')`;
      }

      if (logoNode) {
        document.getElementById('logo').src =
          `${basePath}/${logoNode.getAttribute('src')}`;
      }
    })
    .catch(err => console.error(err));
});
