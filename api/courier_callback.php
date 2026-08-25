export default async function handler(req, res) {
  if (req.method === 'POST') {
    const { waybill_id, delivery_status, last_update_time } = req.body;

    // මෙතැනදී ඔබේ Database එක Update කරන Code එක ලියන්න

    return res.status(200).json({ message: 'Success' });
  }
  return res.status(405).json({ message: 'Method Not Allowed' });
}
