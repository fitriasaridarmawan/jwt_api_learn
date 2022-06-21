this how to running the api steps:
1. login test:
input : https://127.0.0.1:8000/api/login
        method: POST,
        pilih : body dan form-data
        input : email: can get from db
                password : exp. 123456
then send , if true : 200 ok and display : status: true and token : token no.

2. logout test:
input : https://127.0.0.1:8000/api/logout
        method: GET,
        pilih : params
        input : token: can get from token no. login tab test
then send , if true : 200 ok and display : status: true and message : User logged out successfully.

3. register test:
input : https://127.0.0.1:8000/api/logout
        method: POST,
        pilih : body dan form-data
        input : name: your name
                email: your email
                password : exp. 123456
then send , if true : 200 ok and display : status: true and token : token no.
then logout with token no. that put in params

4. tasklist test:
input : https://127.0.0.1:8000/api/tasks
        method: GET,
        pilih : params
        input : token: can get from token no. login tab test
then send , if true : 200 ok and display :
this part was display in bottom form postman.
[
    {
        "id": 24,
        "title": "Excepturi mollitia dolorem veritatis.",
        "details": "Maxime amet enim modi fuga quam repudiandae.",
        "created_by": 10
    }
]

5. task create test:
input : https://127.0.0.1:8000/api/tasks
        method: POST,
        pilih : body dan form-data
        input : title: your title
                details: your details
        pilih : params
        input : token: can get from token no. login tab test
then send , if true : 200 ok and display :
this part was display in bottom form postman.
{
    "status": true,
    "task": {
        "title": "it was a title",
        "details": "it was a details",
        "created_by": 10,
        "updated_at": "2022-06-21T06:09:36.000000Z",
        "created_at": "2022-06-21T06:09:36.000000Z",
        "id": 51
    }
}
then if want to know task that was we're create already in , just reload api tasklist tab and match the id was been display in bottom form postman.

6. task delete test:
input : https://127.0.0.1:8000/api/tasks/id <- id from tasks list
        method: DELETE,
        pilih : params
        input : token: can get from token no. login tab test
then send , if true : 200 ok and display :
this part was display in bottom form postman.
{
    "status": true,
    "task": {
        "id": 24,
        "title": "Excepturi mollitia dolorem veritatis.",
        "details": "Maxime amet enim modi fuga quam repudiandae.",
        "created_by": 10,
        "created_at": "2022-06-21T03:40:24.000000Z",
        "updated_at": "2022-06-21T03:40:24.000000Z"
    }
}
then if want to know task that was we're create already in , just reload api tasklist tab and match the id has been deleted from list in bottom form postman.
