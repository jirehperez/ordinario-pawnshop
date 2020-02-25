const client = stitch.Stitch.initializeDefaultAppClient("ordinariopawn-bmkic");
// const db = client.getServiceClient(stitch.RemoteMongoClient.factory, "mongodb-atlas").db("pawn");
/*
    API KEY AUTHENTICATION
    CREATES _STITCH.CLIENT....... COOKIE
    NO NEED TO RUN THIS EVERYTIME, ONLY TO INSTANTIATE AN AUTHENTICATION SESSION
    ONCE COOKIE IS CREATED FUNCTIONS CAN BE USED
*/
const credential = new stitch.UserApiKeyCredential("tPeZ12nyD3ziVgGfTfoL0Psg2dccexCCthrQglGLlPqprQIGVZZze9Je5xryGwm2");
client.auth.loginWithCredential(credential).then(authedId => {
    // do something
}).catch(err => {
    console.log(err);
});

/*
    TEMPORARY OBJECT MODEL FOR USERS COLLECTION
    TEMPORARILY ALL FEILDS MUST BE STRINGS
*/
// const userCredentials = {
//     firstName: "test2",
//     lastName: "test2",
//     username: "1234",
//     password: "1234",
//     branch: "DAVAO",
//     access: "USER",
//     authCode: "1234"
// };

/*
    FUNCTIONS:
    client.callFunction() - FIRST PARAMETER IS FUNCTION NAME
                          - SECOND PARAMETER IS AN ARRAY CONTAINING OBJECTS
    COLLECTION IS EQUIVALENT TO TABLE NAME IN SQL
    DOCUMENT AND FILTER MUST BE AN OBJECT
    WE USE _id TO IDENTIFY SINGLE ENTRY
    ALL FUNCTION HAS NO VALIDATION YET
    ALWAYS FOLLOW OBJECT MODELS TO CREATE DOCUMENTS
    insertData - REQUIREMENTS COLLECTION, DOCUMENT
    updateData - REQUIREMENTS COLLECTION, FILTER, DOCUMENT
    getData    - REQUIREMENTS COLLECTION, FILTER(OPTIONAL, FILTER BY _id TO SELECT SINGLE RECORD, LEAVE AS {} IF NO FILTERS), DOCUMENT
               - SORTING AND FILTER NOT YET AVAILABLE, TO BE USED ON PAGINATION
    NO DELETE RECORD YET. PLANNING TO JUST ADD deletedBy, delatedDate FIELDS TO DELETE RECORD
*/
viewDataDB(table);

function insertDataDB(table){
    let formFields = {};
    $('#'+table).serializeArray().map(function(x){formFields[x.name] = x.value;});
    console.log(formFields);

    // client.callFunction('updateData', [{ collection: 'users', filter: formFields, document: formFields }]).then(data => {
    //     console.log(data);
    // }).catch(err => {
    //     console.log(err);
    // });

}
function viewDataDB(table){
    client.callFunction('getData', [{ collection: table }]).then(data => {
        // console.log(data);
        const table_data = document.getElementById(table+'_data');
        console.log(table_data);
        for (let key in data) {
            if (data.hasOwnProperty(key)) {
            //    console.log(data[key]);
                table_data.innerHTML += "<tr>"+
                    "<td>"+data[key].firstName+" "+data[key].lastName+"</td>"+
                    "<td>"+data[key].username+"</td>"+
                    "<td>"+data[key].branch+"</td>"+
                    "<td>"+data[key].access+"</td>"+
                    "<td>"+data[key].authCode+"</td>"+
                "</tr>";
            }
         }
         spinner.style.display = 'none';

    }).catch(err => {
        console.log(err);
    });
}
