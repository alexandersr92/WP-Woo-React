import axios from 'axios';

const  API = async (slug, type) => {
  

  const rest = await axios.get(`/wp-json/wp/v2/pages?slug=${slug}`)
  return rest.data[0];
}

export default API;

/*
menu
setting
search
acf_options
single_by_id
single_by_slug
*/