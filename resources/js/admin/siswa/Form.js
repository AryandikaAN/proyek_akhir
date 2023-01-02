import AppForm from '../app-components/Form/AppForm';

Vue.component('siswa-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nisn:  '' ,
                nama:  '' ,
                umur:  '' ,
                alamat:  '' ,
                kota:  '' ,
                kelas:  '' ,
                jurusan:  '' ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});