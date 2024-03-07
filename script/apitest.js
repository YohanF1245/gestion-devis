const SIRET_SAMPLE = "44413003300020";

function getEnterpriseData() {
    let siret = document.getElementById("inputSiret").value;
let request = new XMLHttpRequest();
let url = "https://api.insee.fr/entreprises/sirene/V3/siret/"+siret;
let apikey = "879ba605-9700-38da-95e9-b5350cb6cf73";
request.open('GET', url);

request.setRequestHeader('Authorization', 'Bearer '+apikey);

request.onreadystatechange = function () {
    if (this.readyState === 4) {
        document.getElementById("mainDiv").innerHTML = this.responseText; 
        let datas = this.responseText;
        console.log(typeof(datas));
    };
}
request.send();
}