function getDateTimeByTimezoneOffset(timeZoneOffset) {
    const timestamp = Date.parse(new Date());

    const date = new Date(timestamp);
    const utc = date.getTime() + (date.getTimezoneOffset() * 60000);
    const convertedDate = new Date(utc + (3600000 * timeZoneOffset));

    var YY = convertedDate.getFullYear() + '-';
    var MM = (convertedDate.getMonth() + 1 < 10 ? '0' + (convertedDate.getMonth() + 1) : convertedDate.getMonth() + 1) + '-';
    var DD = (convertedDate.getDate() < 10 ? '0' + (convertedDate.getDate()) : convertedDate.getDate());
    var hh = (convertedDate.getHours() < 10 ? '0' + convertedDate.getHours() : convertedDate.getHours()) + ':';
    var mm = (convertedDate.getMinutes() < 10 ? '0' + convertedDate.getMinutes() : convertedDate.getMinutes()) + ':';
    var ss = (convertedDate.getSeconds() < 10 ? '0' + convertedDate.getSeconds() : convertedDate.getSeconds());

    return {
        time: hh + mm + ss,
        date: YY + MM + DD
    }
}


$(document).ready(function() {
    window.setInterval(()=> {
        $('.city-list>tbody>tr').each(function (){
            let timeZoneOffset = $(this).attr('timezone');
            let date_time = getDateTimeByTimezoneOffset(timeZoneOffset);
            $(this).find('td:nth-child(2)')[0].innerText = date_time.date;
            $(this).find('td:nth-child(3)')[0].innerText = date_time.time;
        });

        $('.city-card').each(function (){
            let timeZoneOffset = $(this).attr('timezone');
            let date_time = getDateTimeByTimezoneOffset(timeZoneOffset);
            $(this).find('div:nth-child(2)')[0].innerText = date_time.time.substr(0, 5);
            $(this).find('div:nth-child(3)')[0].innerText = date_time.date;
        });
    }, 800);


    $('#navbarSupportedContent button[type=submit]').click(() => {
        console.log(111)
        document.location.href='/search/' + $('input[name=keywords]').val();
        return false;
    });
});