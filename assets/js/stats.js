var array;
let set = new Set()

d3.json("../api/sales/get.php", function(data) {
    array = data
    var chart1 = c3.generate({
        data: {
            json:
            data,
            keys: {
                value: ['total']
            },
            names: {
                price_sum: 'Сумма заказа',
            }
        },
        axis: {
            x: {
                label: 'Номер заказа',
            },
            y: {
                label: 'Стоимость заказа'
            }
        },
        bindto: '#chart1'
    });
});

function convertArrayOfObjectsToCSV(){
        var result, ctr, keys, columnDelimiter, lineDelimiter;

        if (array == null || !array.length) {
            return null;
        }
        keys = Object.keys(array[0]);
        result = '';
        result += keys.join(";");
        result += "\n";

    array.forEach(function(item) {
        ctr = 0;
        keys.forEach(function(key) {
            if (ctr > 0) result += ";";
            result += item[key];
            ctr++;
        });
        result += "\n";
    });
    return result;
}

function exportCsv(args) {  
    var csv = convertArrayOfObjectsToCSV();
    if (csv == null) return;

    filename = 'export.csv';

    if (!csv.match(/^data:text\/csv/i)) {
        csv = 'data:text/csv;charset=utf-8,' + csv;
    }
    data = encodeURI(csv);

    link = document.createElement('a');
    link.setAttribute('href', data);
    link.setAttribute('download', filename);
    link.click();
}

fetch('../api/sales/get.php')  
    .then(  
        function(response) {  
        response.json().then(function(data) {  
            document.getElementById("sum").innerText = sum(data) + " ₽"
            document.getElementById("amount").innerText = data.length
            document.getElementById("articles").innerText = uniquePosition(data)

            console.log(data);  
        });  
        }  
    )  
    .catch(function(err) {  
        console.log('Fetch Error :-S', err);  
});

function sum(data){
    var sum = 0;
    for(var i = 0; i < data.length; i++){ 
        sum += parseFloat(data[i].total)
    }
    return sum
}

function uniquePosition(data){
    for(var i = 0; i < data.length; i++){ 
        set.add(data[i].article);
    }
    return set.size
}