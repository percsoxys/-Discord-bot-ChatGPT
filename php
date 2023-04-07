const axios = require('axios');

const openaiApiKey = 'YOUR_OPENAI_API_KEY_HERE';

async function generateText(prompt) {
  const response = await axios.post('https://api.openai.com/v1/engines/davinci-codex/completions', {
    prompt: prompt,
    max_tokens: 150,
    n: 1,
    stop: ['\n', ' '],
    temperature: 0.5
  }, {
    headers: {
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${openaiApiKey}`
    }
  });

  return response.data.choices[0].text;
}
