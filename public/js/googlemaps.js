var imported = document.createElement('script');
imported.setAttribute('async', 'async');
imported.setAttribute('defer', 'defer');
imported.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAr_B-cYJ4gHf0CUTadKQbQtuBn1IvHWQs&callback=initMap';
document.head.appendChild(imported);

var marker;

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 7.2513, lng: 80.3464}
    });

    marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: {lat: 7.2513, lng: 80.3464}
    });
    marker.addListener('click', toggleBounce);
}

function toggleBounce() {
    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}
