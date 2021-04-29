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
    authenticated(state) {
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
      let response = await axios.post("/oauth/token", login_data)

      return dispatch('attempt', response.data.access_token)
    },

    async register(_, register_data) {
      let response = await axios.post("/api/v1/users", register_data)
      console.log(response.data)
    },


    async attempt({ //Check if token is valid
      commit, state
    }, token) {
      if (token) {
        commit('SET_TOKEN', token)
      }

      if (!state.token) {
        return
      }

      try {
        let response = await axios.get('/api/user')

        commit('SET_USER', response.data)
        //console.log(state.user);
      } catch (e) {
        commit('SET_TOKEN', null)
        commit('SET_USER', null)
      }
    }

  },
}