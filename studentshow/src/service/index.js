import axios from 'axios';

const http = axios.create({
    baseURL: "http://api.student.com/api",
    headers: {
        "Content-type": "application/json",
    }
})

export default http;