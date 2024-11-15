// Who likes it?

function likes(names) {
    // TODO
    if (names.length === 0) {
        return ("no one likes this");
    } else if (names.length === 1) {
        return (`${names[0]} likes this`);
    } else if (names.length > 1 && names.length < 3) {
        return (`${names[0]} and ${names[1]} like this`);
    } else if (names.length > 2 && names.length < 4) {
        return (`${names[0]}, ${names[1]} and ${names[2]} like this`);
    } else {
        return (`${names[0]}, ${names[1]} and ${names.length - 2} others like this`);
    }
}

// Find The Parity Outlier

function findOutlier(integers) {
    //your code here
    let evenNumber = [];
    let oddNumber = [];

    integers.forEach(function (integer) {
        if (integer % 2 === 0) {
            evenNumber.push(integer);
        } else {
            oddNumber.push(integer);
        }
    })

    return (evenNumber.length > oddNumber.length) ? oddNumber[0] : evenNumber[0];
}