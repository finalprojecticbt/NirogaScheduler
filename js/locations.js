// Initialize  map
function initMap() {
  //  locations
  const center = { lat: 7.551036446669034, lng: 80.71406995757219 };
  const dehiwala = { lat: 6.861758181742338, lng: 79.86598841180113 };
  const maharagama = { lat: 6.844515966426855, lng: 79.92797673996328 };
  const baththaramulla = { lat: 6.901750616884561, lng: 79.91914975530746 };
  const ratmalana = { lat: 6.827360508518966, lng: 79.8783485687992 };
  const pitakotte = { lat: 6.885901718213257, lng: 79.90828518229151 };
  const a1 = { lat: 6.3073132529019205, lng: 80.29066090002956 };
  const a2 = { lat: 6.787557413976119, lng: 81.44422534476435 };
  const a3 = { lat: 7.9479203660359, lng: 81.25745777165254 };
  const a4 = { lat: 8.947682869197159, lng: 80.46094898834333 };
  const a5 = { lat: 8.312262758145975, lng: 80.02698899462466};
  const a6 = { lat: 7.697586600611864, lng: 79.90613938612863};
  const a7 = { lat: 7.84998161828054, lng: 80.66419602124006 };
  const a8 = { lat: 7.082017852982302, lng: 80.74659348157826 };
  const a9 = { lat: 6.21994731520652, lng: 80.9278678943223 };
  const a10 = { lat: 8.578508798514425, lng: 80.95533371443503 };

  // entered map
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 7,
    center: center,
  });
  // show locations,
  const marker = new google.maps.Marker({
    position: dehiwala,
    map: map,
  });

  const marker2 = new google.maps.Marker({
    position: maharagama,
    map: map,
  });

  const marker3 = new google.maps.Marker({
    position: baththaramulla,
    map: map,
  });
  const marker4 = new google.maps.Marker({
    position: ratmalana,
    map: map,
  });
  const marker5 = new google.maps.Marker({
    position: pitakotte,
    map: map,
  });
  const marker6 = new google.maps.Marker({
    position: a1,
    map: map,
  });

  const marker72 = new google.maps.Marker({
    position: a2,
    map: map,
  });
  const marker7 = new google.maps.Marker({
    position: a3,
    map: map,
  });
  const marker8 = new google.maps.Marker({
    position: a4,
    map: map,
  });
  const marker9 = new google.maps.Marker({
    position: a5,
    map: map,
  });
  const marker10 = new google.maps.Marker({
    position: a6,
    map: map,
  });
  const marker11 = new google.maps.Marker({
    position: a7,
    map: map,
  });
  const marker12 = new google.maps.Marker({
    position: a8,
    map: map,
  });
  const marker13 = new google.maps.Marker({
    position: a9,
    map: map,
  });
  const marker14 = new google.maps.Marker({
    position: a10,
    map: map,
  });


}
