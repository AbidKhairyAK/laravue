import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const state = {
	shrink: false,
};

const mutations = {
	SHRINK_SIDEBAR(state, payload) {
		state.shrink = payload;
	}
}

const actions = {
	shrinkSidebar(context, shrink) {
		context.commit("SHRINK_SIDEBAR", shrink);
	}
}

const getters = {
	getShrink(state) {
		return state.shrink;
	}
}

const store = new Vuex.Store({
	state,
	mutations,
	actions,
	getters
});

export default store;