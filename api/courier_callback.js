export default async function handler(req, res) {
  if (req.method === 'POST') {
    const { waybill_id, delivery_status, last_update_time } = req.body;

    // TODO: Update your Database here

    return res.status(200).json({ status: 'success', message: 'Data received successfully' });
  }
  
  return res.status(200).json({ status: 'active', message: 'Webhook Endpoint is Working' });
}
