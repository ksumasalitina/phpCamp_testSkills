const App= {

    data() {
        return {
            code: '',
            name_: '',
            phone:'',
            position: '',
            employees: [
                {code: 1, name: "Ilya Smith", phone: "+380991232211", position: "Accountant"},
                {code: 2, name: "Anna Vasylieva", phone: "+380691237241", position: "Manager"}
            ]
        }
    },
    methods:{
        addEmployee() {

            let reg_phone1 = /^[0-9]{9,9}$/

            if(!reg_phone1.test(this.phone)){
                document.getElementById('error_phone').textContent="Phone invalid"
            }
            else{
                this.employees.push({ code: this.code, name: this.name_, phone: '+380'+this.phone, position: this.position })
                this.code = ''
                this.name_= ''
                this.phone = ''
                this.position= ''
                document.getElementById('error_phone').textContent=""
            }

        }
    }
}
Vue.createApp(App).mount('#app');