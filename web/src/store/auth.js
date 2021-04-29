import axios from 'axios'

export default {
  namespaced: true,
  state: {
    token: null,
    refreshToken: null,
    //grand type refresh token
    user: null
  },

  getters: {
    isLogged(state) {
      return state.token && state.user;
    },

    user(state) {
      return state.user
    }
  },

  mutations: {
    SET_TOKEN(state, token) {
      state.token = token
    },
    SET_USER(state, data) {
      state.user = data
    }
  },
  actions: {
    /*async login({
      dispatch
    }, login_data) {
      let response = await axios.post("/oauth/token", login_data);

      dispatch('attempt', response.data.token);
    },*/

     async login(_,login_data) {
      let response = await axios.post("/oauth/token", login_data);
      console.log(response.data);
    },


    async register(_,register_data) {
        let response = await axios.post("/api/v1/users", register_data);

      /*let response1 = await axios.post("/api/v1/users", register_data).then(function (response) {
        console.log(response.statusText);
      }, function (error) {
        console.log(error.response.data.errors);
      });
      dispatch('register', response1);*/

      console.log(response.data);


    },


    async attempt({ //Check if token is valid
      commit
    }, token) {
      commit('SET_TOKEN', token)

      try {
        let response = await axios.get('/api/user', {
          headers: {
            'Authorization': 'Bearer ' + token
          }
        })

        commit('SET_USER', response.data)
      } catch (e) {
        commit('SET_TOKEN', null)
        commit('SET_USER', null)
      }
    }

  },
}