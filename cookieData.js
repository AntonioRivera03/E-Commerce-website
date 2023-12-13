function cookieData(data)
{
    let finalArr    = [];
    const dataArr   = data.split(';');
    
    userID          = dataArr[0].split('=')[1];
    picture         = dataArr[1].split('=')[1];
    flag            =dataArr[2].split('=')[1];
    finalArr.push(userID, picture, flag);

    return finalArr;
}