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
    let timeZoneOffset = $('.city-detail').attr('timezone');

    window.setInterval(()=> {
        let date_time = getDateTimeByTimezoneOffset(timeZoneOffset);
        $('.city-detail-header>div:nth-child(2)')[0].innerText = date_time.time;
        $('.city-detail-header>div:nth-child(3)')[0].innerText = date_time.date;
    }, 200);

    $('#navbarSupportedContent button[type=submit]').click(() => {
        console.log(111)
        document.location.href='/search/' + $('input[name=keywords]').val();
        return false;
    });
});

