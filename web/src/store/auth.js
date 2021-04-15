import axios from 'axios'

export default {
  namespaced: true,
  state: {
    token: null,
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
    async login({
      dispatch
    }, login_data) {
      let response = await axios.post("/api/login", login_data); //TODO fix endpoint

      dispatch('attempt', response.data.token);
    },

    async attempt({
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