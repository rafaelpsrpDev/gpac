import http from './index.js';

export default class grupoDataService {

    getAllStudent() {
        return http.get('/student')
    }

    getStudent(id) {
        return http.get(`/student/${id}`)
    }

    addStudent(data) {
        return http.post('/student/', data)
    }

    updateStudent(id, data) {
        return http.put(`/student/${id}/`, data)
    }

    deleteStudent(id) {
        return http.delete(`/student/${id}`)
    }
}