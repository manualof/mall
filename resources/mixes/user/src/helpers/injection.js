import {
    mixinAxios,
} from '../mixes/injection';

const injection = {};

function install(Vue) {
    mixinAxios(injection, Vue);
}

export default Object.assign(injection, {
    install,
});