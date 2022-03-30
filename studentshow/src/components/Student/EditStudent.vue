<template>
  <div>
    <form class="position">
      <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input
          type="none"
          v-model="aStudent.nome"
          class="form-control"
          placeholder="Enter name"
        />
      </div>
      <div class="form-group">
        <label for="">Idade</label>
        <input
          type="Number"
          v-model="aStudent.idade"
          class="form-control"
          placeholder="Age"
        />
      </div>
      <div class="form-group">
        <label for="">Sexo</label>
        <input
          v-model="aStudent.sexo"
          type="text"
          maxlength="1"
          class="form-control"
          placeholder="M or F"
        />
      </div>

      <button
        type="submit"
        @click="updateStudent"
        style="margin: 10px"
        class="btn btn-primary"
      >
        Update
      </button>
      <button
        type="submit"
        @click="deleteStudent"
        style="margin: 10px"
        class="btn btn-danger"
      >
        Delete
      </button>
    </form>
  </div>
</template>

<script>
import grupoDataService from "../../service/grupoDataService.js";
export default {
  name: "EditStudent",
  data() {
    return {
      grupoData: new grupoDataService(),
      idStudent: this.$route.params.id,
      aStudent: {
        nome: "",
        idade: 0,
        sexo: "",
      },
    };
  },
  methods: {
    getStudent(id) {
      this.grupoData.getStudent(id).then((res) => {
        this.aStudent.nome = res.data.nome;
        this.aStudent.idade = res.data.idade;
        this.aStudent.sexo = res.data.sexo;
      });
    },
    updateStudent() {
      this.grupoData
        .updateStudent(this.idStudent, this.aStudent)
        .then((res) => {
          console.log(res);
          this.$router.replace({
            name: "list-student",
          });
        });
    },
    deleteStudent() {
      this.grupoData.deleteStudent(this.idStudent).then((res) => {
        console.log(res);
        this.$router.replace({
          name: "list-student",
        });
      });
    },
  },
  mounted() {
    this.getStudent(this.$route.params.id);
  },
};
</script>

<style scoped>
.position {
  width: 400px;
  margin-top: 50px;
  margin-left: 730px;
}
</style>