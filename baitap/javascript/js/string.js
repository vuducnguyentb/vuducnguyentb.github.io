var products = [
    {
        image: 'https://vn-live-01.slatic.net/original/121ab4237bd54730b9ec26167b21e2ff.jpg',
        name: 'đTDĐ MAXX N3310 Classic 2 Sim (Đỏ)',
        price: '168.150 ₫'
    },
    {
        image: 'https://vn-live-02.slatic.net/original/93b5dcf86fcddf24a503e82a3e475340.jpg',
        name: 'wiko U Feel Go 16GB RAM 3GB 4000mAH (Vàng) - Hãng phân phối ABCD',
        price: '1.788.000 ₫'
    },
    {
        image: 'https://vn-live-02.slatic.net/original/16473e8de450403206fa504515bc9521.jpg',
        name: 'đTDĐ MAXX N1280 (Xám) - Bảo hành 12 tháng - HÃNG PHÂN PHỐI XYZ',
        price: '113.050 ₫'
    },
    {
        image: 'https://vn-live-01.slatic.net/original/4cbbe97db295b05b39cd0d8935e0bcba.jpg',
        name: 'đTDĐ MAXX N1110 2 Sim (Đen)',
        price: '154.850 ₫'
    },
    {
        image: 'https://vn-live-02.slatic.net/original/89bce8332f0b89c0500f59ac00501c0c.jpg',
        name: 'điện thoại di động ZONO N8110 (2.4 inch) 2 Sim - Vàng',
        price: '246.050 ₫'
    },
    {
        image: 'https://vn-live-02.slatic.net/original/0cb7d89f8a64e474f6a54b2a47d43546.jpg',
        name: 'điện thoại ZIP8 - Hàng Chính Hãng - Bảo Hành 12 Tháng - Tặng ốp lưng',
        price: '989.000 ₫'
    },
    {
        image: 'https://vn-live-01.slatic.net/original/fd6eecbdd5ff9c4e002c375a1758546c.jpg',
        name: 'đTDĐ MAXX N3310 CLASSIC 2 Sim (Xám)',
        price: '168.150 ₫'
    },
    {
        image: 'https://vn-live-02.slatic.net/original/ad2def3c3fd658a530ae9766cb7b3435.jpg',
        name: 'điện thoại di động ZONO N8110 (1.8 inch) - Vàng',
        price: '160.550 ₫'
    },
    {
        image: 'https://vn-live-01.slatic.net/original/329c660485c872c1bcb2b313f06f7a4c.jpg',
        name: 'đTDĐ MAXX N3310 Classic 2 Sim (Vàng)',
        price: '168.150 ₫'
    },
    {
        image: 'https://vn-test-11.slatic.net/p/2/dtdd-zono-n105-2-sim-co-camera-bao-hanh-12-thang-xanh-den-6020-74483892-66fdc6f0b797b7c12440d9938a0951f0-catalog_233.jpg',
        name: 'đTDĐ ZONO N105 2 Sim Có Camera (Bảo hành 12 tháng) - Xanh Đen',
        price: '165.000 ₫'
    },
    {
        image: 'https://vn-live-01.slatic.net/original/5c2421faf79bbd7d40eeecfd600caf63.jpg',
        name: 'đTDĐ ZONO N260 (2018) màn hình rộng 2.4 inch - Bảo hành 12 tháng toàn quốc',
        price: '198.550 ₫'
    },
    {
        image: 'https://vn-live-01.slatic.net/original/75f6ad8b0aeaaa9ff09668399eee1a65.jpg',
        name: 'đTDĐ ZONO N105 2 Sim Có Camera (Bảo hành 12 tháng) - Đen',
        price: '164.350 ₫'
    },
    {
        image: 'https://vn-live-02.slatic.net/original/4d96b6205599cc17af68623d15b92cf5.jpg',
        name: 'samsung Galaxy J7 Pro 2017 32GB Ram 3GB (Xanh Coral)',
        price: '4.751.010 ₫'
    },
    {
        image: 'https://vn-test-11.slatic.net/p/2/mobiistar-zumbo-s2-dual-1107-64219461-b5dfb514e97144d6a3788e6d60c92c70-catalog_233.jpg',
        name: 'mobiistar Zumbo S2 Dual',
        price: '2.040.000 ₫'
    },
    {
        image: 'https://vn-live-01.slatic.net/original/bacfed4514c5aa945123a595d52ead02.jpg',
        name: 'xiaomi Mi 4 Ram 3GB - Hàng nhập khẩu',
        price: '1.650.000 ₫'
    },
    {
        image: 'https://vn-test-11.slatic.net/p/2/dien-thoai-lv102-1sim-xanh-duong-hang-nhap-khau-6805-82896381-4f590a4d789028413ca7be78dbb8a51e-catalog_233.jpg',
        name: 'điện thoại LV102 1sim ( Xanh dương)- Hàng nhập khẩu',
        price: '99.999 ₫'
    }
];


// Code here
var products_tag = document.getElementById('products');
var html='';
for(var i=0;i<products.length;i++){
    var product=products[i];
    html+="<li class=\"product\">";
    html+="<div class=\"product-img\">";
    html+="<img src=\""
    html+="</div>"
    html+="</li>";
}