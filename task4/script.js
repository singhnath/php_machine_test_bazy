// Function to calculate the number of days between two dates
function calculateDaysBetweenDates(date1, date2) {
    const oneDay = 24 * 60 * 60 * 1000; // One day in milliseconds
    const firstDate = new Date(date1);
    const secondDate = new Date(date2);

    const diffDays = Math.round(Math.abs((firstDate - secondDate) / oneDay));
    return diffDays;
}

// Function to convert a number to words
function numberToWords(number) {
    const words = [
        '', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine',
        'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'
    ];
    const tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

    if (number < 20) {
        return words[number];
    } else if (number < 100) {
        return tens[Math.floor(number / 10)] + (number % 10 !== 0 ? ' ' + words[number % 10] : '');
    } else if (number < 1000) {
        return words[Math.floor(number / 100)] + ' Hundred' + (number % 100 !== 0 ? ' ' + numberToWords(number % 100) : '');
    } else {
        return 'Number is too large';
    }
}

// Sample input dates
const date1 = '26/12/2022';
const date2 = '29/12/2024';

// Calculate the number of days between the dates
const daysDifference = calculateDaysBetweenDates(date1, date2);

// Print the number of days in both number and word format
console.log(`${daysDifference} Days`);
console.log(`${numberToWords(daysDifference)} Days`);
