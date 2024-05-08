import {STATE, API_DEV_URL, API_PROD_URL} from '../env.json'

export default defineNuxtPlugin(() => {
    return {
      provide: {
        api: async (endpoint: string, optios?: object) => {
            try {
                let apiUrl = API_PROD_URL
                if (STATE == 'dev') {
                    apiUrl = API_DEV_URL
                }

                let req = await fetch(apiUrl + endpoint, optios)

                return await req.json()
            } catch (error) {
                console.log(error)
            }
        }
      }
    }
})
  