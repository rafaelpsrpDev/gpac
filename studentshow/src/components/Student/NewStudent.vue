<template>
  <div>
    <form class="position">
      <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input
          type="none"
          v-model="student.nome"
          class="form-control"
          placeholder="Enter name"
        />
      </div>
      <div class="form-group">
        <label for="">Idade</label>
        <input
          type="Number"
          v-model="student.idade"
          class="form-control"
          placeholder="Age"
        />
      </div>
      <div class="form-group">
        <label for="">Sexo</label>
        <input
          v-model="student.sexo"
          type="text"
          maxlength="1"
          class="form-control"
          placeholder="M or F"
        />
      </div>

      <button
        type="submit"
        @click="addStudent"
        style="margin-top: 20px"
        class="btn btn-primary"
      >
        Submit
      </button>
    </form>
  </div>
</template>

<script>
import grupoDataService from "../../service/grupoDataService.js";
export default {
  name: "NewStudent",
  data() {
    return {
      student: {
        nome: "",
        idade: 0,
        sexo: "",
      },
      grupoData: new grupoDataService(),
    };
  },
  methods: {
    addStudent() {
      const data = {
        nome: this.student.nome,
        idade: this.student.idade,
        sexo: this.student.sexo,
      };
      this.grupoData.addStudent(data).then((res) => {
        console.log(res);
        this.$router.replace({
          name: "list-student",
        });
      });
      console.log(data);
    },
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