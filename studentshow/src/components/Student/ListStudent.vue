<template>
  <div class="position">
    <div class="c">
      <button type="button" class="btn btn-success">
        <router-link class="btn btn-success" to="/newStudent"
          >New Studnent</router-link
        >
      </button>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col">Sexo</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="stu in students" :key="stu.id">
          <td>{{ stu.id }}</td>
          <td>{{ stu.nome }}</td>
          <td>{{ stu.idade }}</td>
          <td>{{ stu.sexo }}</td>
          <td>
            <button type="button" class="btn btn-primary">
              <router-link
                class="btn btn-primary"
                :to="'/editStudent/' + stu.id"
                >Editar</router-link
              >
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import grupoDataService from "../../service/grupoDataService.js";
export default {
  name: "ListStudent",
  data() {
    return {
      grupoData: new grupoDataService(),
      students: [],
    };
  },
  created() {
    this.getAllStudents();
  },
  methods: {
    getAllStudents() {
      this.grupoData.getAllStudent().then((res) => {
        this.students = res.data;
        console.table(res.data);
      });
    },
  },
};
</script>

<style scoped>
.c {
  margin-bottom: 30px;
}
.position {
  padding: 100px;
}
</style>